<template>
    <div>
        <v-app-bar app flat dense dark class="nav-color">

            <v-app-bar-nav-icon href="/">
                <v-img src="/all-assets/common/logo/cpb/cpbgroup.png" alt="room" max-height="40" max-width="40" contain
                    class="nav-logo-bg"></v-img>
            </v-app-bar-nav-icon>

            <v-spacer></v-spacer>

            <v-btn text link route :to="{ name: 'Dashboard'}" small exact>
                Dashboard
            </v-btn>

            <!-- <v-btn text link route :to="{ name: 'Booked'}" small>
                My Booked
            </v-btn> -->

            <v-menu open-on-hover offset-y>
                <template v-slot:activator="{ on, attrs }">
                    <v-btn v-bind="attrs" v-on="on" text small>
                        Dropdown
                    </v-btn>
                </template>
                <v-list dense>
                    <v-list-item router link>
                        <v-list-item-title>Title</v-list-item-title>
                    </v-list-item>

                    <v-list-item router link>
                        <v-list-item-title>Title</v-list-item-title>
                    </v-list-item>

                    <v-list-item router link>
                        <v-list-item-title>Title</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>


            <v-btn text link route href="/logout" small>
                Logout
            </v-btn>

        </v-app-bar>
    </div>
</template>

<style scoped>
    .v-btn--active {
        color: #fff;
        background: linear-gradient(90deg, #aa4b6b, #6b6b83, #3b8d99);
    }

    .nav-color {
        background: #aa4b6b;
        background: -webkit-linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);
        background: linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);
    }

    .nav-logo-bg {
        background-color: white !important;
        border-radius: 8px;
    }

    a:hover {
        text-decoration: none;
    }

</style>
