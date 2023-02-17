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
