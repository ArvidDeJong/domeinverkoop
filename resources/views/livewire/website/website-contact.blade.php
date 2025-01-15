<div class="container">
    <div class="row">
        <div class="col-7">
            <h1>Contact over {{ request()->getHttpHost() }}</h1>

            @if ($stored == true)
                <h2>Bedankt voor uw reactie</h2>
                <p>U ontvangt in uw mailbox een kopie van de aanvraag.<br>
                    Wij nemen hierna zo snel mogelijk contact met u op</p>
            @else
                <p>&nbsp;</p>
                <h2>Vul uw gegevens in</h2>
                <p>Nadat u het formulier heeft ingevuld ontvangt u een kopie van de aanvraag en nemen wij zo snel
                    mogelijk contact met u op</p>
                <form wire:submit="submit">
                    <div class="mb-3 row">
                        <label for="keuze" class="col-sm-3 col-form-label">Ik wil het domein *</label>
                        <div class="col-sm-9">
                            <select class="form-control" wire:model.live="keuze" id="keuze">
                                <option value="">Maak een keuze</option>
                                <option value="Kopen">Kopen</option>
                                <option value="Huren">Huren</option>
                            </select>
                            @error('keuze')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @if ($keuze != null)
                    <div class="mb-3 row">
                        <label for="naam" class="col-sm-3 col-form-label">Prijs</label>
                        <div class="col-sm-9">
                            &euro;{{ $keuze == 'Huren' ? $domain->prijs_huren." per maand" : $domain->prijs_kopen."" }},- excl. 21% btw.
                        </div>
                    </div>
                    @endif
                    <div class="mb-3 row">
                        <label for="naam" class="col-sm-3 col-form-label">Naam * {{ $naam }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="naam" id="naam">
                            @error('naam')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="adres" class="col-sm-3 col-form-label">Adres *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="adres" id="telefoon">
                            @error('adres')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="postcode" class="col-sm-3 col-form-label">Postcode *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="postcode" id="postcode">
                            @error('postcode')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="woonplaats" class="col-sm-3 col-form-label">Woonplaats *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="woonplaats" id="woonplaats">
                            @error('woonplaats')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="land" class="col-sm-3 col-form-label">Land *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="land" id="land">
                            @error('land')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email *</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" wire:model="email" id="email">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telefoon" class="col-sm-3 col-form-label">Telefoon *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="telefoon" id="telefoon">
                            @error('telefoon')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3"><strong>Niet verplicht</strong>
                        </div>
                        <div class="col-sm-9">
                            <hr>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bedrijfsnaam" class="col-sm-3 col-form-label">Bedrijfsnaam</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="bedrijfsnaam" id="bedrijfsnaam">
                            @error('bedrijfsnaam')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btw" class="col-sm-3 col-form-label">BTW nr.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model="btw" id="btw">
                            @error('btw')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="opmerkingen" class="col-sm-3 col-form-label">Opmerkingen</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" wire:model="opmerkingen" id="opmerkingen"></textarea>
                            @error('opmerkingen')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary" wire:loading.class="btn btn-secondary" wire:loading.attr="disabled" value="Ja ik wil het domein {{ strtolower($this->keuze) }} voor  &euro;{{ $keuze == 'Huren' ? $domain->prijs_huren." per maand" : $domain->prijs_kopen."" }}">
                            <div wire:loading>Een moment geduld...</div>
                        </div>
                    </div>
                </form>
            @endif
        </div>
        <div class="col-2">
        </div>
        <div class="col-3">
            <h2>Darvis Agile DevOps</h2>
            <p>
                Arvid de Jong
                <br>Koningin Maximalaan 123
                <br>1787 DA Julianadorp
                <br>
                <a href="mailto:info@darvis.nl">info@darvis.nl</a><br>
                <br>
                <br><strong>Bank</strong>: Rabobank
                <br><strong>IBAN</strong>:&nbsp;NL32RABO0180732595
                <br><strong>BIC</strong>: RABONL2U
                <br>
                <br><strong>KVK</strong>:&nbsp;60299703
                <br><strong>BTW</strong>: NL853848932B01
                <br>
                <br>
                Alle genoemde prijzen zijn excl. 21% btw.
            </p>

        </div>
    </div>
</div>
