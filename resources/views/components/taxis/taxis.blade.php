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
                <div class="d-flex justify-content-evenly align-items-center">
                    <form
                        action="issues"
                        method="post"
                        class="removeForm"
                    >
                        <input type="hidden" name="_method" value="put">
                        <button type="submit" class="btn btn-link text-decoration-none link-danger p-0">
                            <i class='fas fa-trash-alt'></i>
                        </button>
                    </form> 
                    <a href="#" class="text-decoration-none link-warning"><i class="fas fa-edit"></i></a> 
                    <a href="#" class="text-decoration-none link-info"><i class="fas fa-info-circle"></i></a></td>
                </div>
            </td>
        </tr>

    </tbody>
</table>
