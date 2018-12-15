<div id="new_donors" class="content" data-scrollview="true" style="background-color: #f5f5ef">
    <div class="container">
        <h3 class="content-title"><strong>Нашите Најнови Крводарители</strong></h3>
        <h5 class="content-desc">
            Ова се крводарителите кои денес даруваа за првпат крв и запливаа во водите на крводарителството и хуманоста.
        </h5>
        <div class="row">
            <div class="col-md-6"  v-for="user in users">
                <div class="team">
                    <div class="image flipInX contentAnimated finishAnimated" data-animation="true" data-animation-type="flipInX">
                        <img v-bind:src="'/uploads/' + user.image">
                    </div>
                    <div class="info">
                        <h3 class="name" style="color:red">@{{ user.name }} @{{ user.surname }}</h3>
                        <div class="title text-theme"><h6 style="color:black">Крвна Група :  А+</h6></div>
                        <p>@{{ user.years }} Години , @{{ user.city.name }}</p>
                        <div class="social">
                            <a href="#" style="background-color: red"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                            <a href="#" style="background-color: red"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                            <a href="#" style="background-color: red"><i class="fab fa-google-plus-g fa-lg fa-fw"></i></a>
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
        el:'#new_donors',
        data:{
          users:[],
        },
        mounted(){
            axios.get('getNewUsers').then(response=>{
                let users = [];
                for(let i=0;i<response.data.length;i++)
                {
                    users[i] = {name:response.data[i].name,surname:response.data[i].surname,image:response.data[i].image,
                    blood_type:response.data[i].blood_type_id,years:response.data[i].years,city:response.data[i].city};
                }
                //console.log(users);
                this.users = users;
            })
                .catch(e => {
                    console.log(e);
                });
        }
    })
</script>
