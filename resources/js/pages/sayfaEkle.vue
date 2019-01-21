<template>
    <div class="row justify-content-md-center  animated pulse" data-appear="appear" data-animation="pulse">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="bordered-layout-card-center">Sayfa Ekle</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><router-link :to="{name: 'sayfalar'}" class="success">Sayfalar</router-link></li>
                            <li><a href="/panel/icerik/create" class="success">İçerik Ekle</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>


                        </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <form action="/api/sayfa" class="form form-horizontal form-bordered" method="POST" id="sForm">

                       <div class="form-actions center">
                         <Status name='say_durum' />
                        <Input label='Sayfa Adı' name='say_adi' plc='Sayfa Adı' />
                        <Select label='Dil' name='say_dil' plc='Sayfa Dili' :Opts="dil" />
                        <Select label='Menu' name='say_menu' plc='Sayfa Pozisyonu' :Opts="pozisyon" />
                         <Input label='Başlık' name='say_baslik' plc='Başlık'/>
                          <Input label='Seo Başlık' name='say_seo_baslik' plc='Seo Başlık'/>
                           <Yazi  label='Anahtar Kelimeler' name='say_seo_keywords' plc='Virgün ile ayırınız en çok 14 kelime giriniz'/>
                          <Yazi  label='Seo Açıklama' name='say_seo_aciklama' plc='Seo Açıklama'/>
                         <button type="button" class="btn btn-success" @click="ekle">
                                    <i class="la la-check-square-o"></i> Ekle
                                </button>
                       </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Input from '../Helpers/Input';
import Select from '../Helpers/Select';
import Status from '../Helpers/Status';
import Yazi from '../Helpers/Text';
export default {
    components: { Input, Select, Status, Yazi},

    data(){
        return{
            dil:['TR','ENG'],
            pozisyon:['Bilgilendirme','Destek']
        }
    },
    methods: {
        ekle(){
          kayitS('sForm');
        }
    }

}



</script>
