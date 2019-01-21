<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Tables</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Müşteri</th>
                                    <th>Website</th>
                                    <th>Teslim Tarihi</th>
                                    <th>Durum</th>
                                    <th class="text-right">-</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in list">
                                    <th scope="row">{{ item.id}}</th>
                                    <td>{{item.cl_musteri}}</td>
                                    <td>{{item.cl_website}}</td>
                                    <td>{{item.cl_teslim}}</td>
                                    <td>{{item.cl_durum}}</td>
                                    <td>asiyon</td>

                                </tr>

                                </tbody>
                            </table>
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

                axios.get('http://localhost:8000/api/isler').then(resp => this.list = resp.data);

            }
        }
    }
</script>