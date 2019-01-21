<template>
        <div class="form-group row">
            <label class="col-md-3 label-control" >{{label}}</label>
            <div class="col-md-9">
            <input :type="type"  :name="name" id="" class="form-control" :placeholder="plc" :value="value">
            </div>
        </div>

</template>
<script>
export default {

    props:{
        label:String,
         name:String,
         plc:{
             dafault: '',
             type:String,
         },
        type: {
        default: 'text',
        type: String
        },
        value:{
            default:'',

        }
    },

}
</script>

