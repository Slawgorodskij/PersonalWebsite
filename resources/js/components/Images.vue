<template>

    <div>
        <p>I am working</p>
        <!--        <carousel>-->
        <!--            <carousel-slide></carousel-slide>-->
        <!--        </carousel>-->
    </div>
    <!--    <div class="presentation-block" v-for="city in cityArray" :key="city.id">-->
    <!--        <img class="presentation-block__photo" :src="city.images[0]['name']" alt="фотография города">-->
    <!--        <div class="presentation-block__text">-->
    <!--            {{ city.name }}-->
    <!--        </div>-->
    <!--        <div class="presentation-block__hover">-->
    <!--            <a class="presentation-block__hover_link" :href="'cities/' + city.slug">-->
    <!--                <h3>{{ city.description }}</h3>-->
    <!--            </a>-->
    <!--        </div>-->
    <!--    </div>-->

</template>

<script>

import _ from 'lodash';

export default {
    components: {},

    data() {
        return {
            imagesArray: [],
            visibleSlide: 0,
        }
    },

    methods: {
        articleId() {
            const article = document.querySelector('.introduction');
            let articleId = article.dataset.name
            console.log(articleId)
            return articleId
        },

        fetch() {

            axios.get('/api/apiImages', {
                articleID: this.articleId(),
            })
                .then(response => {
                    console.log(response);
                    this.imagesArray = response.data
                })

        }
    },
    created() {
        this.fetch()


    }
}
</script>
