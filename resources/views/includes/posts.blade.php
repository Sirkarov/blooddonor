<div id="posts" class="content" data-scrollview="true" style="background-color: #f5f5ef">
    <div class="container">
        <h3 class="content-title"><strong>Огласи</strong></h3>
        <h5 class="content-desc">
            Ова се огласи за кесички крв што е потребно во моментов,со дадена локација.
        </h5>
        <div class="row">
            <div class="col-md-6" v-for="post in posts">
                <div class="card" style=" background-color: #f2f2f2">
                    <h5 class="card-header h5 text-center" style="background-color: #ff0000;color:white">Потребна е крвна група <strong>@{{ post.blood_type }}</strong> </h5>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <h6 class="card-title">Опис: @{{ post.description }}</h6>
                                <h3><strong></strong></h3>
                            </div>
                            <div class="col-lg-12">
                                <h6 class="card-title">Локација: @{{ post.city }}</h6>
                                <h3><strong></strong></h3>
                            </div>
                            <div class="col-lg-12">
                                <h6 class="card-title">Потенцијалниот дарител да испрати меил за контакт</h6>
                                <h3><strong></strong></h3>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el:'#posts',
        data:{
            posts:[],
        },
        mounted(){
            axios.get('getPosts').then(response=>{
                let posts = [];
                for(let i=0;i<response.data.length;i++)
                {
                    posts[i] = {city:response.data[i].city.name,blood_type:response.data[i].blood_type.type,description:response.data[i].
                            description};
                }
                console.log(posts);
                this.posts = posts;
            })
                .catch(e => {
                    console.log(e);
                });
        }
    })
</script>

