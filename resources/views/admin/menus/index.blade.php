@extends('admin.layouts.app')
@section('title', 'Menus')

@section('content')
<p style="color: #b8b8b8; font-size: 14px; margin-bottom: 24px;">Manage the navigation links shown in the header and footer.</p>

<div class="dashboard-grid" style="grid-template-columns: repeat(2, 1fr);">
    @foreach($menus as $menu)
    <div class="panel">
        <div class="panel-header">
            <h3 class="panel-title">{{ $menu->label }}</h3>
            <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-edit">Edit</a>
        </div>
        <div class="panel-body">
            @php $items = $menu->items ?? []; @endphp
            @if(count($items) === 0)
                <p style="color: #888; font-size: 14px;">No items yet. Click <strong>Edit</strong> to add some.</p>
            @else
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($items as $item)
                    <li style="padding: 8px 0; border-bottom: 1px solid rgba(255,255,255,0.04); display: flex; justify-content: space-between; gap: 10px;">
                        <span style="color: #fff; font-size: 14px;">
                            {{ $item['label'] ?? '—' }}
                            @if(!empty($item['children']))
                                <span style="color: #d4af37; font-size: 11px; margin-left: 6px;">({{ count($item['children']) }} sub)</span>
                            @endif
                        </span>
                        <span style="color: #888; font-size: 12px; font-family: monospace;">{{ $item['url'] ?? '' }}</span>
                    </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection
