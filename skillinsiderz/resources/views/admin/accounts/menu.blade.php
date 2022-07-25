<div class="btn-group">
    <a href="{{ route('accounts.feecollection') }}" class="btn btn-primary">All Enrollment</a>
    <a href="{{ route('all.installments') }}" class="btn btn-primary">Paid Installments</a>
    <a href="{{ route('pending.installments') }}" class="btn btn-primary">Pending Installments</a>
    <a href="{{ route('month.installments') }}" class="btn btn-primary">{{  date('F') }} Installments </a>
</div>