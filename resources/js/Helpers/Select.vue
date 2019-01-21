<template>
    <div class="form-group row">
                                        <label class="col-md-3   label-control" for="hide_search">{{Label}}</label>
                                        <div class="col-md-9">
                                            <select class="hide-search form-control" id="" :name="name">
                                             <option disabled="" selected="">{{plc}}</option>
                                                 <option v-for="item in Opts">{{item}}</option>

                                            </select>
                                        </div>
                                    </div>
</template>
<script>
export default {
    props : { Label: String,
      name:String,
      Opts: Array,
      plc:String,

      }
}
</script>

