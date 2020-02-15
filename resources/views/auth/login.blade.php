@extends('layouts.app')

@section('content')

    <v-container
        fluid
        class="fill-height"
    >
        <v-row
            justify="center"
            align="center"
        >
            <v-col cols="12" md="8" lg="4">
                <v-card
                    class="elevation-12"
                >
                    <v-toolbar
                        color="primary"
                        dark
                        flat
                    >
                        <v-toolbar-title>Login form</v-toolbar-title>
                        <v-spacer></v-spacer>
                    </v-toolbar>

                    <v-card-text>
                        <v-form
                            method="post"
                            action="/login"
                        >
                        @csrf 
                            <v-text-field
                                name="email"
                                prepend-icon="mdi-account"
                                label="Email"
                                type="email"
                                class="my-2"
                                @error('email') error-messages="{{ $message }}" @enderror
                                placeholder="{{ old('email') }}"
                            >
                            </v-text-field>
                            <v-text-field
                                name="password"
                                prepend-icon="mdi-lock"
                                label="Password"
                                type="password"
                                class="my-2"
                                @error('password') error-messages="{{ $message }}" @enderror
                            >
                            </v-text-field>
                            <v-btn
                                color="blue"
                                block 
                                tile
                                dark
                                class="my-4"
                                type="submit"
                            >
                                Login
                            </v-btn>
                        </v-form>
                    </v-card-text>
                    {{-- <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="primary">Login</v-btn>
                    </v-card-actions> --}}
                </v-card>
            </v-col>
        </v-row>

    </v-container>

@endsection
