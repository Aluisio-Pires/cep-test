<template>
    <div class="rounded-lg px-2 py-4">
        <!-- CEP -->
        <div class="col-span-6 sm:col-span-4">
            <jet-label for="cep" value="CEP" />
            <jet-input id="cep" type="number" @keyup="maxValue" class="mt-1 block w-full" v-model="form.cep" autocomplete="cep" />
            <jet-input-error :message="form.errors.cep" class="mt-2" />
        </div>
        <div class="my-2 grid justify-items-end">
            <jet-button  :class="{ 'opacity-25': form.processing }" :disabled="form.processing" @click="buscaCEP">
                Buscar
            </jet-button>
        </div>

        <div class="mx-2">
            <div class="w-full text-center mb-2">
                <h1 class="text-lg"><strong>Cidade: {{localidade}}</strong></h1>
            </div>
            <div class="w-full text-center my-2">
                <h1 class="text-lg"><strong>UF: {{uf}}</strong></h1>
            </div>
        </div>
    </div>

</template>

<script>
import { defineComponent } from 'vue'
import JetButton from '@/Jetstream/Button.vue'
import JetFormSection from '@/Jetstream/FormSection.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetActionMessage from '@/Jetstream/ActionMessage.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

export default defineComponent({
    components: {
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
    },

    data() {
        return {
            form: this.$inertia.form({
                cep: null,
            }),
            localidade: null,
            uf: null,
        }
    },

    methods: {
        buscaCEP(){
            if(this.form.cep<10000000){
                this.form.errors.cep = 'CEP inválido, precisa conter pelo menos 8 caracteres.'
                return true
            }
            this.form.cep = 66666666
            this.form.errors.cep = null
        },
        maxValue(){
            if(this.form.cep>99999999){
                this.form.cep=99999999
            }
        }
    },
})
</script>
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
