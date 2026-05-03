@php
    $a = config('lantanahouse.analytics');
    $provider = $a['provider'] ?? null;
@endphp
@if ($provider === 'plausible' && !empty($a['plausible_domain']))
    <script defer data-domain="{{ $a['plausible_domain'] }}" src="{{ $a['plausible_script'] }}"></script>
@elseif ($provider === 'fathom' && !empty($a['fathom_site_id']))
    <script src="{{ $a['fathom_script'] }}" data-site="{{ $a['fathom_site_id'] }}" defer></script>
@elseif ($provider === 'custom' && !empty($a['custom_script_url']))
    <script defer src="{{ $a['custom_script_url'] }}"></script>
@endif
