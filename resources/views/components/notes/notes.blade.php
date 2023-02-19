<table class="table table-hover table-bordered caption-top">
    <caption>Notes</caption>
    <thead>
        <tr>
            <th scope="col">notes</th>
            <th scope="col">date</th>
            <th scope="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNote">
                    add
                </button>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
            <tr>
                <td>{{$note->note}}</td>
                <td>{{$note->created_at}}</td>
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
        @endforeach
    </tbody>
</table>

<!-- modal add note -->
<div class="modal fade" id="addNote" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="noteModalLabel">Add a Note</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="notes">
                @csrf
                <div class="mb-3">
                  <label for="note" class="col-form-label">Note:</label>
                  <textarea class="form-control" id="note" name="note"></textarea>
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