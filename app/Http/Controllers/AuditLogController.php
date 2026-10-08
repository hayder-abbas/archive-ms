<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuditLogRequest;
use App\Http\Requests\UpdateAuditLogRequest;
use App\Models\AuditLog;

class AuditLogController extends Controller
{
    public function index()
    {
        return inertia('auditlogs/index', [
            'auditLogs' => AuditLog::query()
                ->latest('updated_at')
                ->paginate(50)
                ->toResourceCollection()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuditLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AuditLog $auditLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AuditLog $auditLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuditLogRequest $request, AuditLog $auditLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuditLog $auditLog)
    {
        //
    }
}
