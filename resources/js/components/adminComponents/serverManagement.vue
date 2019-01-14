<template>
    <div>
        <el-button type="primary" round icon="el-icon-caret-right" @click="openServer">启动聊天服务</el-button>
        <el-button type="danger" icon="el-icon-close" @click="closeServe">停止</el-button>
        <div style="margin-top: 20px">
            <code>
                {{msg}}
            </code>
        </div>

    </div>
</template>

<script>
    export default {
        name: "serverManagement",
        data(){
            return {
                msg: ''
            }
        },
        methods:{
            openServer: function () {
                axios.get('server/open').then(response => {
                    this.msg = response;
                    console.log(response);
                })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
            },
            closeServe: function () {

            }
        }
    }
</script>

<style scoped>

</style>