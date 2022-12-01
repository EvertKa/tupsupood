

<template>
    <nav class="h-16 w-full bg-white flex  items-center justify-between">
        <div class="">
        <img class="h-16 w-24 pl-6" src="https://www.nicorex.eu/failid/kataloog_tooted/410x320/pablo-snus-ice-cold-50mg.jpg?v=2" alt="">
        </div>
        <div class="flex gap-10" >
        <a href="">Kodu</a>
        <a href="">Pood</a>
        <a class="pr-6" href="">Kontakt</a>
    </div>
    </nav>
    
    <div class="h-full w-full flex flex-wrap justify-center">
        

        <div class="h-64 w-64 bg-white m-5 rounded-lg p-2" v-for="p in products.data" :key="p">
            {{p.name}}
            <br> <br>
            {{p.description}}
            <br><br>
            Hind: {{p.price}}.00€
        </div>
    </div>


</template>

<script setup>
        const props = defineProps({
            products: {
                type: Object,
                default: null,
            },
        })
        console.log(props.products);

</script>.