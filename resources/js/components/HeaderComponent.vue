<template>
    <div>
    <md-toolbar class="md-large md-primary">
        <div class="md-toolbar-row">
            <div class="md-toolbar-section-start">
                <md-button class="md-icon-button">
                    <md-icon>menu</md-icon>
                </md-button>
            </div>
            <div class="md-toolbar-section-end">
                <md-button class="md-icon-button">
                    <md-icon>refresh</md-icon>
                </md-button>
                <md-button class="md-icon-button">
                    <md-icon>more_vert</md-icon>
                </md-button>
            </div>
        </div>
    </md-toolbar>
        <h1>Ola</h1>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
