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

 <!-- modal add wakeUpCall -->
 <div class="modal fade" id="addWakeUpCall" tabindex="-1" aria-labelledby="wakeUpCallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="wakeUpCallModalLabel">Add WakeUpCall</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="wakeUpCalls/createWakeUpCall">
                <div class="mb-3">
                  <label for="roomNumber" class="col-form-label">Room number:</label>
                  <input type="number" class="form-control" id="roomNumber" name="roomNumber">
                </div>

                <div class="mb-3">
                    <label for="wakeUpTime" class="col-form-label">Wake up time time:</label>
                    <input type="datetime-local" class="form-control" id="wakeUpTime" name="wakeUpTime">
                </div>

                <div class="mb-3">
                    <label for="guestName" class="col-form-label">Guest Name:</label>
                    <input type="text" class="form-control" id="guestName" name="guestName">
                  </div>

                <div class="mb-3">
                  <label for="observations" class="col-form-label">observations:</label>
                  <textarea class="form-control" id="observations" name="observations"></textarea>
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