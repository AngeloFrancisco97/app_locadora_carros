<template>
    <div>
                <!-- Inicio do card de tabela -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th v-for="titulo, key in titulos" :key="key" scope="col" class="text-uppercase">{{titulo}}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="obj in dados" :key="obj.id">
                    <td v-if="titulos.includes(chave)" v-for="valor, chave in obj" :key="chave">
                        <span v-if="chave == 'imagem'">
                            <img :src="'/storage/'+valor" width="30" height="30" alt="">
                        </span>
                        <span v-else>
                            {{valor}}
                        </span>
                    </td>

                    <!--th scope="row">{{m.id}}</th>
                    <td>{{marca.nome}}</td>
                    <td><img :src="'/storage/'+marca.imagem" width="30" height="30" alt=""></td-->
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['dados', 'titulos'],
        
    }
</script>
