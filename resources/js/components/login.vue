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
            <el-input placeholder="请输入密码" v-model="password">
                <template slot="prepend">密码</template>
            </el-input>
        </div>

        <el-button style="margin: 0 auto; display: block;" type="primary" @click="login">登录</el-button>
    </el-card>
</template>

<script>
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
                axios.post('/login/auth', {
                    username: this.username,
                    password: this.password
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
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