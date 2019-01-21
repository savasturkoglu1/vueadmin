<template>
    <div class="form-group row">
         <label class="col-md-3 label-control" >{{label}}</label>
            <div class="col-md-9">
      <textarea class="form-control"  :rows="rows"  :name="name" :id="id" :placeholder="plc">{{value}}</textarea>
              </div>
     </div>
</template>

<script>
export default {
    props: {
        label:String,
        name: String,
        id: {
            default:'',
            type:String,

        },
        att: {
            dafault:'',
            type:String
        },
        value:{
            dafault:'',
            type: String
        },
        plc:{
            dafault:'',
            type: String
        },
        rows: {
            default:3,

        }
    }
}
</script>

