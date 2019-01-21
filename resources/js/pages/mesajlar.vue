<template>
    <div class="container">


        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar d-flex">

                    <div class="email-app-list-wraper col-md-12 card p-0">
                        <div class="email-app-list">
                            <div class="card-body chat-fixed-search">
                                <fieldset class="form-group position-relative has-icon-left m-0 pb-1">
                                    <input type="text" class="form-control" id="searchMesaj" placeholder="Mesaj Ara">
                                    <div class="form-control-position">
                                        <i class="ft-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="users-list" class="list-group">
                                <div class="users-list-padding media-list" id="mesajList">
                                    <a class="media border-0 msjLink "   v-for="item in liste"  data-id="" id="rw7" >
                                            <div class="media-left pr-1">
                                                  <span class="avatar avatar-md">
                                                    <span class="media-object rounded-circle text-circle " style="background-color: #E666B3">J</span>
                                                  </span>
                                            </div>
                                            <div class="media-body w-100">
                                                <h6 class="list-group-item-heading text-bold-500">{{item.m_isim}}
                                                    <span class="float-right">

                                            </span>
                                                </h6>

                                                <p class="list-group-item-text mb-0">
                                                    <span class="font-small-2 primary date float-left">{{item.created_at}}</span>
                                                <span class="float-right primary">
                                                  <span class="badge badge-info mr-1">{{item.m_kayit}}</span>
                                                </span>

                                                </p>

                                            </div>
                                        </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="card email-app-details d-none d-lg-block" id="mesajBody">
                        <div class="card-content">
                            <div class="email-app-options card-body">
                                <div class="row justify-content-end">

                                    <div class="col-md-6 col-12 text-right">

                                        <div class="btn-group ml-1">
                                            <a class="btn btn-sm btn-success" ><i class="la la-whatsapp"></i></a>
                                            <button type="button" class="btn btn-sm btn-outline-warning" ><i class="la la-envelope"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger"><i class="ft-trash-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-app-title card-body">
                                <h3 class="list-group-item-heading">-</h3>
                                <small>-</small>
                                <p class="list-group-item-text">
                              <span class="primary">
                                 <span class="badge badge-primary">-</span>
                                 <i class="float-right font-medium-3 ft-star warning"></i>
                              </span>
                                </p>
                            </div>
                            <div class="media-list">
                                    <div class="card-content">
                                        <div class="email-app-text card-body">
                                            <div class="email-app-message">
                                                -
                                            </div>
                                        </div>

                                </div>

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
            liste:null
            }
        },


        created(){
            this.getMesajs();
        },

        methods:{
          getMesajs(){
              axios.get('/api/tummesajlar').then(resp => this.liste = resp.data );

          }
        }

    }

</script>

