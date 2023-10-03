<template>
    <div class="container">
        <houses-list-filters
            @search="getList"
            class="mt-2 mb-2"
        />
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card position-relative">
                    <div v-if="showPreloader" class="preloader">
                        <div class="spinner"/>
                    </div>
                    <div class="card-header">
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                Name
                            </div>
                            <div class="col-md-2">
                                Price
                            </div>
                            <div class="col-md-2">
                                Bedrooms
                            </div>
                            <div class="col-md-2">
                                Bathrooms
                            </div>
                            <div class="col-md-2">
                                Storeys
                            </div>
                            <div class="col-md-2">
                                Garages
                            </div>
                        </div>
                    </div>
                    <div v-if="isEmptyResult" class="card-body">
                        No results found
                    </div>
                    <div v-else class="card-body">
                        <div
                            v-for="house in houses"
                            class="row justify-content-center"
                        >
                            <div class="col-md-2">
                                {{ house.name }}
                            </div>
                            <div class="col-md-2">
                                {{ house.price }}
                            </div>
                            <div class="col-md-2">
                                {{ house.bedrooms }}
                            </div>
                            <div class="col-md-2">
                                {{ house.bathrooms }}
                            </div>
                            <div class="col-md-2">
                                {{ house.storeys }}
                            </div>
                            <div class="col-md-2">
                                {{ house.garages }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'HouseList',

    data() {
        return {
            houses: [],
            showPreloader: false,
        }
    },
    computed: {
        isEmptyResult() {
            return this.houses.length === 0;
        }
    },
    mounted() {
        this.getList({});
    },
    methods: {
        getList(filters = {}) {
            this.showPreloader = true;
            axios.get('/api/house', {
                params: filters
            })
                .then((response) => {
                    this.houses = response.data
                })
                .finally(() => {
                    this.showPreloader = false;
                })
        },
    },
}
</script>

<style scoped lang="scss">
.card-body .row:nth-child(odd) {
    background-color: #dddfde;
}
</style>
