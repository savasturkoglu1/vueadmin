<template>
<div class="row  animated pulse" data-appear="appear" data-animation="pulse">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sayfalar</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">



                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">

                <div class="row justify-content-center">
                    <div class="col-md-10 ">
                        <div class="table-responsive">
                            <table class="table mb-0" id="dTable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Sayfa Adı</th>
                                    <th>Sayfa Dili</th>
                                    <th>Sayfa Durumu</th>
                                    <th>Sayfa Pozisyon</th>
                                    <th>--</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr v-for="item in list">
                                    <th scope="row">{{item.id}}</th>
                                    <td>{{item.say_adi}}</td>
                                    <td>{{item.say_dil}}</td>
                                    <td>{{item.say_durum}}</td>
                                    <td>{{item.say_menu}}</td>
                                    <td>
                                       <router-link :to="{name: 'sayfadetay', params: {id: item.id}}"
                                        class="btn sp-item  btn-sm btn-outline-success mr-1">
                                        <i class="la la-edit"></i></router-link>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
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
        data() {
            return {
                list: null
            }
        },
        created(){
            this.fetcData();
        },

        methods: {
            fetcData(){

                axios.get('http://localhost:8080/api/sayfa').then(resp => this.list = resp.data);

            }
        }
    }

</script>



