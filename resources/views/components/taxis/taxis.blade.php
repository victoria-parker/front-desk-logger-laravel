<table class="table table-hover table-bordered caption-top">
    <caption>Taxis</caption>
    <thead>
        <tr>
            <th scope="col">room number</th>
            <th scope="col">pickup time</th>
            <th scope="col">booking number</th>
            <th scope="col">notes</th>
            <th scope="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaxi">
                    add
                </button>
            </th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>152</td>
            <td>pickup time</td>
            <td>4568</td>
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
