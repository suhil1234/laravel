$(document).ready(function() {
    $('.portfolio-link').on('click', function(e) {
      e.preventDefault();
  
      var eventId = $(this).data('event-id');
      var eventDetailsUrl = '/events/' + eventId;
  
      $.ajax({
        url: eventDetailsUrl,
        method: 'GET',
        success: function(response) {
          var eventDetails = response;
  
          $('.portfolio-modal .modal-body h2').text(eventDetails.title);
          $('.portfolio-modal .modal-body p').text(eventDetails.description);
  
          // Convert the timestamp to a human-readable format
          var eventTime = new Date(eventDetails.time);
          var formattedTime = eventTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
          var formattedDate = eventTime.toLocaleDateString();
  
          $('.portfolio-modal .modal-body ul li:first-child').text('Date: ' + formattedDate);
          $('.portfolio-modal .modal-body ul li:last-child').text('Time: ' + formattedTime);
  

          $('#event_img').attr('src', '/storage/' + eventDetails.image);
         
        },
        error: function(xhr, status, error) {
          console.log('Error:', error);
        }
      });
    });
  });