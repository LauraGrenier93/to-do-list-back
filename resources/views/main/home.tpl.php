
<main class="container">
    <h2 class="title">Welcome to the To do List API</h2>

    <p class="explain">Here are the end points for connecting your database to the Api:</p>
    <p class="explain">Here is a website that uses the Api features  in French:<a href="https://ma-list-perso.surge.sh/" target="_blank" rel="noopener">https://ma-list-perso.surge.sh/</a></span></p>
    <table>
    <caption>Table showing the routes for the tasks</caption>
    <thead>
        <tr>
            <th colspan="3" class="name">Tasks</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td class="read">GET</td>
            <td>https://my-liste-pro-back.herokuapp.com/tasks</td>
            <td>allows you to retrieve all tasks</td>

        </tr>
        <tr>
            <td class="create">POST</td>
            <td>https://my-liste-pro-back.herokuapp.com/tasks</td>
            <td>allows you to add all tasks</td>
        </tr>
        <tr>
            <td class="read">GET</td>
            <td>https://my-liste-pro-back.herokuapp.com/tasks/{id}</td>
            <td>allows you to retrieve a task</td>
        </tr>
        <tr>
            <td class="replace">PATCH</td>
            <td>https://my-liste-pro-back.herokuapp.com/tasks/{id}</td>
            <td>allows you to replace a task</td>
        </tr>
        <tr>
            <td class="update">PUT</td>
            <td>https://my-liste-pro-back.herokuapp.com/tasks/{id}</td>
            <td>allows you to modify a task</td>
        </tr>
        <tr>
            <td class="delete">DELETE</td>
            <td>https://my-liste-pro-back.herokuapp.com/tasks/{id}</td>
            <td>allows you to delete a task</td>
        </tr>
    </tbody>
</table>
<table>
    <caption>Table showing the routes for the categories</caption>
    <thead>
        <tr>
            <th colspan="3" class="name">Categories</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="read">GET</td>
            <td>https://my-liste-pro-back.herokuapp.com/categories</td>
            <td>allows you to retrieve all categories</td>
        </tr>
        <tr>
            <td class="read">GET</td>
            <td>https://my-liste-pro-back.herokuapp.com/categories/{id}</td>
            <td>allows you to retrieve a category</td>
        </tr>
    </tbody>
</table>
</main>

