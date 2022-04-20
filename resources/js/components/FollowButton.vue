<template>
    <div>
        <button :class="buttonStyle" @click="followUser" v-text="buttonText" ></button>
    </div>
</template>

<script>
export default {
    props: ['userId', 'follows'],

    mounted() {
        console.log("Component mounted.");
    },

    data: function() {
        return {
            status: this.follows,
        }
    },
    

    methods: {
        followUser() {
            axios.post('/follow/' + this.userId)
                .then(response => {
                    this.status = !this.status;
                    document.querySelector(".posts_followers_following").children[1].children[0].innerHTML = response.data;
                })
                .catch(error => {
                    if(error.response.status === 401){
                        window.location = '/login';
                    }
                });
        }
    },

    computed: {
        buttonText() {
            if (this.status) {
                return 'Following';
            } else {
                return 'Follow';
            }
        },

        buttonStyle(){
            if(this.status){
                return 'unfollow_button'
            }else{
                return 'follow_button'
            }
        }
    }
};
</script>
