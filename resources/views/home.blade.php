<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>

    <div id="app">
        <home-list></home-list>
    </div>

    <script src="{{ mix('js/app.js') }}"></script> <!-- Assure-toi que le chemin vers ton fichier JS est correct -->

    <script>
    import HomeList from '../../dareTruth_project/src/components/HomeList.vue';

    const app = createApp({});
    app.component('home-list', HomeList);
    app.mount('#app');
</script>

    </body>
</html>
