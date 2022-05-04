
        <main>
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Huren</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">&euro; {{ $domain->prijs_huren }}<small class="text-muted fw-light">/maand</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Per maand opzegbaar</li>
                  </ul>
                  <a href="/contact/?keuze=Huren" class="w-100 btn btn-lg btn-primary">Het domein huren</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Kopen</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">&euro; {{ $domain->prijs_kopen }}</h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Je wordt eigenaar</li>
                  </ul>
                  <a href="/contact/?keuze=Kopen" class="w-100 btn btn-lg btn-primary">Het domein kopen</a>
                </div>
              </div>
            </div>
          </div>
        </main>

