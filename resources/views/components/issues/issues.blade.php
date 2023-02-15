<table class="table table-hover table-bordered caption-top">
    <caption>Issues</caption>
<thead>
    <tr>
        <th scope="col">room number</th>
        <th scope="col">issue</th>
        <th scope="col">date</th>
        <th scope="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addIssue">
                add
            </button>
        </th>
    </tr>
</thead>
<tbody>

    <tr>
        <td>200</td>
        <td>text</td>
        <td>date</td>
        <td>
            <form
                action="issues"
                method="post"
                class="removeForm"
            >
                <input type="hidden" name="_method" value="put">
                <input type="submit" value="remove" class="btn btn-link text-decoration-none link-danger">
            </form> -
            <a href="#" class="text-decoration-none link-warning">modify</a> -
            <a href="#" class="text-decoration-none link-info">see more</a></td>
        </td>
    </tr>


</tbody>
</table>
