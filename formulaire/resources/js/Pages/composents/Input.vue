<script lang="ts" setup>
    const props = defineProps({
        id: String,
        type: String,
        label: String,
        modelValue: [String, Number]
    });

    const emit = defineEmits(['update:modelValue'])
</script>
<template>
    <div class="input-box flex flex-col w-full">        
        <label :for="props.id">{{props.label}}</label>
        <input :type="props.type" :value="props.modelValue" v-on:input="$event => emit('update:modelValue', $event.target.value)" class="p-3 w-full h-5 outline-none border-0 border-b-2 border-slate-300" :id="props.id">
    </div>
</template>