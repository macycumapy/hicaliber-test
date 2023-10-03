<template>
    <div class="row">
        <div class="col-md-3 mb-2">
            <input
                v-model="name"
                type="text"
                @change="search"
                placeholder="Name"
            >
        </div>
        <div class="col-md-3 mb-2">
            <input
                v-model="price_from"
                type="number"
                @change="search"
                placeholder="Price from"
            >
        </div>
        <div class="col-md-3 mb-2">
            <input
                v-model="price_to"
                type="number"
                @change="search"
                placeholder="Price to"
            >
        </div>
        <div class="col-md-3 mb-2">
            <input
                v-model="bedrooms"
                type="number"
                @change="search"
                placeholder="Bedrooms"
            >
        </div>
        <div class="col-md-3 mb-2">
            <input
                v-model="bathrooms"
                type="number"
                @change="search"
                placeholder="Bathrooms"
            >
        </div>
        <div class="col-3 mb-2">
            <input
                v-model="storeys"
                type="number"
                @change="search"
                placeholder="Storeys"
            >
        </div>
        <div class="col-md-3 mb-2">
            <input
                v-model="garages"
                type="number"
                @change="search"
                placeholder="Garages"
            >
        </div>
    </div>
</template>

<script>
export default {
    name: 'HousesListFilters',
    data() {
        return {
            name: null,
            price_from: null,
            price_to: null,
            bedrooms: null,
            bathrooms: null,
            storeys: null,
            garages: null,
        }
    },
    methods: {
        search() {
            this.$emit('search', {
                name: this.name && this.name.trim().length > 0 ? this.name.trim() : null,
                price_from: this.price_from ? this.price_from : null,
                price_to: this.price_to ? this.price_to : null,
                bedrooms: this.bedrooms ? this.bedrooms : null,
                bathrooms: this.bathrooms ? this.bathrooms : null,
                storeys: this.storeys ? this.storeys : null,
                garages: this.garages ? this.garages : null,
            })
        },
    },
}
</script>
