<script setup>
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import Input from './composents/Input.vue';

const form = useForm({
  titre: null,
  description: null,
  prixAchat: null,
  prixVente: null,
  quantite: null,
  auteur: null,
});

function submit() {
  console.log(form.titre);
  router.post('save', form)
}
</script>
<template>
    <div class="container p-8 px-4 mx-auto flex justify-center items-center">
        <form action="" method="post" class="form border  p-8 flex flex-col items-center gap-4 min-w-60 w-[90%] max-w-[360px]" @submit.prevent="submit">
           <Input type="text" label="Titre"  id="titre" v-model="form.titre"/>
           <Input type="text" label="Descripsion"  id="description" v-model="form.description"/>
           <Input type="text" label="Prix d'achat"  id="prixAchat" v-model="form.prixAchat"/>
           <Input type="text" label="Prix de vente"  id="prixVente" v-model="form.prixVente"/>
           <Input type="number" label="Quantite en stock"  id="quantite" v-model="form.quantite"/>
           <Input type="text" label="Auteur"  id="auteur" v-model="form.auteur"/>
            <div class="flex flex-col gap-5 w-full py-4">
                <input type="file" class="" id="">
                <input type="submit" class="submit" id="" value="Enregistrer">
            </div>                
        </form>
    </div>
</template>