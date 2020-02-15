<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <v-app>
            @auth
            <v-navigation-drawer
                app
                clipped
                v-model="drawer"
            >
                <v-list dense>
                    <v-list-item @click.stop="drawer = !drawer">
                    <v-list-item-action>
                        <v-icon>mdi-exit-to-app</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Open Temporary Drawer</v-list-item-title>
                    </v-list-item-content>
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>
            <v-app-bar
                app 
                clipped-left
                color="deep-purple"
                dark
            >
                <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                <v-toolbar-title>Toolbar</v-toolbar-title>
                <v-spacer></v-spacer>
            
                <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
                </v-btn>
        
                <v-menu
                    left
                    bottom
                >
                    <template v-slot:activator="{ on }">
                        <v-btn icon v-on="on">
                        <v-icon>mdi-dots-vertical</v-icon>
                        </v-btn>
                    </template>
                    <v-list>
                        <v-list-item
                        v-for="n in 5"
                        :key="n"
                        @click="() => {}"
                        >
                        <v-list-item-title>Option @{{ n }}</v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </v-app-bar>
            @endauth
            <v-content>
                @yield('content')
            </v-content>
        </v-app>
    </div>
</body>
</html>
