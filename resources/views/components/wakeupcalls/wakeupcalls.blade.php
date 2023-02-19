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
        @foreach ($wake_up_calls as $wake_up_call)
            <tr>
                <td>{{$wake_up_call->room_number}}</td>
                <td>{{$wake_up_call->wake_up_time}}</td>
                <td>{{$wake_up_call->guest_name}}</td>
                <td>{{$wake_up_call->observations}}</td>
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

 <!-- modal add wakeUpCall -->
 <div class="modal fade" id="addWakeUpCall" tabindex="-1" aria-labelledby="wakeUpCallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="wakeUpCallModalLabel">Add WakeUpCall</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="wakeUpCalls">
                @csrf
                <div class="mb-3">
                  <label for="room_number" class="col-form-label">Room number:</label>
                  <input type="number" class="form-control" id="room_number" name="room_number">
                </div>

                <div class="mb-3">
                    <label for="wake_up_time" class="col-form-label">Wake up time time:</label>
                    <input type="datetime-local" class="form-control" id="wake_up_time" name="wake_up_time">
                </div>

                <div class="mb-3">
                    <label for="guest_name" class="col-form-label">Guest Name:</label>
                    <input type="text" class="form-control" id="guest_name" name="guest_name">
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