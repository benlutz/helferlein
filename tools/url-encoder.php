<div class="card my-2" id="URL-Encoder">
  <div class="card-body">
    <h2 class="card-title">Encode or Decode URLs</h2>
    <h6 class="card-subtitle text-muted">Encode or Decode URLs with a click of a button.</h3>
    <form class="text-white">
      <div class="form-row my-2" >
        <div class="col">
          <input type="text" class="form-control" placeholder="Paste URL" id="URL-Input" autocomplete="off">
        </div>
      </div>
        <div class="form-row my-2">
        <div class="col">
          <a class="btn btn-primary mt-1" onclick="Encode()">Encode</a>
          <a class="btn btn-primary mt-1" onclick="Decode()">Decode</a>
          <!-- <a class="btn btn-secondary mt-1" onclick="CopyToClipboard()"><i class="far fa-copy"></i> Copy to Clipboard</a> -->
        </div>
      </div>
      </div>
    </form>
  </div>

<!-- URL ENCODE/Decode/Copy To Clipboard Script -->
<script type="text/JavaScript">
function Encode() {
  document.getElementById('URL-Input').value = encodeURIComponent(document.getElementById('URL-Input').value)
}

function Decode() {
  document.getElementById('URL-Input').value = decodeURIComponent(document.getElementById('URL-Input').value)
}

function CopyToClipboard() {
  var copyText = document.getElementById("URL-Output");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

</script>
