<template>
    <el-card class="center">
        <div slot="header" class="clearfix">
            <span>匿名聊天室后台登录</span>
        </div>
        <div style="margin-bottom: 20px">
            <el-input placeholder="请输入账号" v-model="username">
                <template slot="prepend">账号</template>
            </el-input>
        </div>

        <div style="margin-bottom: 20px">
            <el-input placeholder="请输入密码" type="password" v-model="password">
                <template slot="prepend">密码</template>
            </el-input>
        </div>

        <el-button style="margin: 0 auto; display: block;" type="primary" @click="login">登录</el-button>
    </el-card>
</template>

<script>

    // import { Message } from 'element-ui';

    export default {
        name: "login",
        data(){
            return {
                username: '',
                password: ''
            }
        },
        methods: {
            login: function () {
                window.axios.post('/login/auth', {
                    username: this.username,
                    password: this.password
                })
                    .then(response => {

                        if (response.code === 0){
                            this.$message.success(response.msg);
                            window.location.href = 'admin';
                        } else{
                            this.$message.warning(response.msg);
                        }
                    })
                    .catch(err =>{

                })
            }
        },
        mounted() {

        }
    }
</script>

<style scoped>
    .center{
        display: block;
        max-width: 600px;
        margin: 0 auto;
    }
</style>