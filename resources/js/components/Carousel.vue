<template>

    <button @click="prev" class="carousel-block__button">
        <svg class="carousel__button-logo" viewBox="0 0 284.935 284.936" width="24" height="24">
            <path
                d="M110.488,142.468L222.694,30.264c1.902-1.903,2.854-4.093,2.854-6.567c0-2.474-0.951-4.664-2.854-6.563L208.417,2.857 C206.513,0.955,204.324,0,201.856,0c-2.475,0-4.664,0.955-6.567,2.857L62.24,135.9c-1.903,1.903-2.852,4.093-2.852,6.567 c0,2.475,0.949,4.664,2.852,6.567l133.042,133.043c1.906,1.906,4.097,2.857,6.571,2.857c2.471,0,4.66-0.951,6.563-2.857 l14.277-14.267c1.902-1.903,2.851-4.094,2.851-6.57c0-2.472-0.948-4.661-2.851-6.564L110.488,142.468z"/>
        </svg>
    </button>

    <div class="carousel-block__images">
        <slot></slot>
    </div>

    <button @click="next" class="carousel-block__button">
        <svg class="carousel__button-logo" viewBox="0 0 792.033 792.033" width="24" height="24">
            <path
                d="M617.858,370.896L221.513,9.705c-13.006-12.94-34.099-12.94-47.105,0c-13.006,12.939-13.006,33.934,0,46.874 l372.447,339.438L174.441,735.454c-13.006,12.94-13.006,33.935,0,46.874s34.099,12.939,47.104,0l396.346-361.191 c6.932-6.898,9.904-16.043,9.441-25.087C627.763,386.972,624.792,377.828,617.858,370.896z"/>
        </svg>
    </button>

</template>

<script>
export default {
    name: "Carousel",

    methods: {
        next() {
            this.$emit('next')
        },
        prev() {
            this.$emit('prev')
        },
    }

}
</script>

<style lang="scss">

.carousel-block__images {
    position: relative;
    min-height: 50vh;
    width: 100%;
    overflow: hidden;
}

.carousel-block__button {
    width: 50px;
    min-height: 50vh;
    border: none;
    fill: var(--color-black);
    background-color: rgba(42, 42, 42, 0.14);
    transition: background-color 0.3s linear;

    &:hover {
        background-color: rgba(42, 42, 42, 0.24);
        fill: var(--color-title);
    }
}


</style>
