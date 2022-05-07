<template>

    <div class="carousel container wrapper">
        <carousel
            @next="next"
            @prev="prev"
        >
            <carousel-slide
                v-for="(image, data) in imagesArray"
                :key="id"
                :index="data"
                :visibleSlade="visibleSlide"
                :direction="direction">
                <img class="carousel-block__image"
                     :src="'/storage/images/' + image['name_image']"
                     alt="photo">
                <div v-show="image['description'] !== null" class="carousel-block__hover">
                    <h2>{{ image['description'] }}</h2>
                </div>
            </carousel-slide>
        </carousel>
    </div>

</template>

<script>

import Carousel from './Carousel';
import CarouselSlide from './CarouselSlide';

export default {
    components: {
        Carousel,
        CarouselSlide,
    },
    props: ['id'],
    data() {
        return {
            imagesArray: [],
            visibleSlide: 0,
            direction: '',
        }
    },

    computed: {
        imagesArrayLen() {
            return this.imagesArray.length
        },

    },

    methods: {

        fetch() {
            axios.get('/api/apiImages/' + this.id, {})
                .then(response => {
                    console.log(response);
                    this.imagesArray = response.data
                })
        },

        next() {
            if (this.visibleSlide >= this.imagesArrayLen - 1) {
                this.visibleSlide = 0;
            } else {
                this.visibleSlide++;
            }
            this.direction = 'left';
        },
        prev() {
            if (this.visibleSlide <= 0) {
                this.visibleSlide = this.imagesArrayLen - 1;
            } else {
                this.visibleSlide--;
            }
            this.direction = 'right';
        },
    },
    created() {
        this.fetch()
    }
}
</script>

<style lang="scss">
.carousel {
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-block__image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.carousel-block__hover {
    position: absolute;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    text-align: center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: var(--color-white);
    background: var(--color-background);
    z-index: 0;
    transition: all 0.4s linear;
}


</style>
