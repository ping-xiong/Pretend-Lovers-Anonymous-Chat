<template>
    <div class="container">
        <el-tabs type="border-card" stretch="true">
            <el-tab-pane label="服务管理">
                <server-management></server-management>
            </el-tab-pane>
            <el-tab-pane label="状态管理">

            </el-tab-pane>
            <el-tab-pane label="房间管理">

            </el-tab-pane>
            <el-tab-pane label="情头管理">

            </el-tab-pane>
            <el-tab-pane label="话题管理">

            </el-tab-pane>
        </el-tabs>
    </div>
</template>

<script>

    import serverManagement from './adminComponents/serverManagement.vue'

    export default {
        components:{
            serverManagement
        },
        mounted() {

        }
    }
</script>

<style>
    body, html{
        margin: 0;
        padding: 0;
    }
</style>