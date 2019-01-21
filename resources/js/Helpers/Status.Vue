<template>
                         <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Durum</label>
                                    <div class="col-md-9">
                                        <div class="row">

                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" :name="name" class="md_check" :checked="aCheck"  value="Aktif">
                                                    <label for="input-radio-11">Aktif</label>
                                                </fieldset>

                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" :name="name" class="md_check"  :checked="pCheck"   value="Pasif">
                                                    <label for="input-radio-11">Pasif</label>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>
</template>
<script>
export default {
    props : {
        name:String,
        checked: {
            type:String,
            default:''
        }
    },
    data(){
        return {
            aCheck:true,
            pCheck:false,
        }
    },
    created(){
        if(this.checked == 'Pasif'){
           this.aCheck=false,
           this.pCheck=true
        }
    },

}
</script>
