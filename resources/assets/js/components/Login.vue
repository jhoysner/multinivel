<template>
    <div>
        <md-input-container>
            <label>Usuario o Correo Electrónico</label>
            <md-input name="user" v-model="user" maxlength="30" required></md-input>
        </md-input-container>

        <md-input-container md-has-password>
            <label>Contraseña</label>
            <md-input name="password" type="password" maxlength="30" required></md-input>
        </md-input-container>

        <md-button type="submit" class="md-raised md-primary">Ingresar</md-button>
    </div>
</template>

<script>
    export default{
        updated: function () {
            this.$nextTick(function () {
                console.log(this.user)
            })
        },
        data() {
            return {
                user: ''
            }
        }
    }
</script>

