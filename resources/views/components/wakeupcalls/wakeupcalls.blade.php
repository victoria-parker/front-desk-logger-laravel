<table class="table table-hover table-bordered caption-top">
    <caption>Wake up calls</caption>
    <thead>
        <tr>
            <th scope="col">room number</th>
            <th scope="col">wakeup time</th>
            <th scope="col">guest name</th>
            <th scope="col">notes</th>
            <th scope="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addWakeUpCall">
                    add
                </button>
            </th>
        </tr>
    </thead>
    <tbody>

            <tr>
                <td>400</td>
                <td>7:00am</td>
                <td>Mr. Smith</td>
                <td>text</td>
                <td>
                    <form
                        action="#"
                        method="post"
                        class="removeForm"
                    >
                    <input type="hidden" name="_method" value="put">
                    <input type="submit" value="remove" class="btn btn-link text-decoration-none link-danger">
                    </form>
                 - <a href="#" class="text-decoration-none link-warning">modify</a> - <a href="#" class="text-decoration-none link-info">see more</a>
                </td>
            </tr>

    </tbody>
</table>
