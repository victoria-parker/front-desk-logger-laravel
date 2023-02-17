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

<!-- modal add issue -->
<div class="modal fade" id="addIssue" tabindex="-1" aria-labelledby="issueModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="issueModalLabel">Add an Issue</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="issues/createIssue">
                <div class="mb-3">
                  <label for="roomNumber" class="col-form-label">Room number:</label>
                  <input type="number" class="form-control" id="roomNumber" name="roomNumber">
                </div>

                <div class="mb-3">
                    <label for="guestName" class="col-form-label">Guest Name:</label>
                    <input type="text" class="form-control" id="guestName" name="guestName">
                </div>

                <div class="mb-3">
                  <label for="text" class="col-form-label">Issue:</label>
                  <textarea class="form-control" id="text" name="text"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
      </div>
    </div>
</div>
