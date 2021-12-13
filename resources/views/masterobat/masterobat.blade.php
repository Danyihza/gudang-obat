@extends('templates.master')

@section('title', 'Master Obat')

@section('content')
<div class="content">
    <div class="col-span-12 mt-8">
        <h2 class="text-lg font-medium truncate mr-5">
            Master Obat
        </h2>
        <div class="box">
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                        <div class="sm:flex items-center sm:mr-4">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                            <select id="tabulator-html-filter-field"
                                class="form-select w-full sm:w-32 xxl:w-full mt-2 sm:mt-0 sm:w-auto">
                                <option value="name">Name</option>
                                <option value="category">Category</option>
                                <option value="remaining_stock">Remaining Stock</option>
                            </select>
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                            <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                                <option value="like" selected="">like</option>
                                <option value="=">=</option>
                                <option value="<">&lt;</option>
                                <option value="<=">&lt;=</option>
                                <option value=">">&gt;</option>
                                <option value=">=">&gt;=</option>
                                <option value="!=">!=</option>
                            </select>
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                            <input id="tabulator-html-filter-value" type="text"
                                class="form-control sm:w-40 xxl:w-full mt-2 sm:mt-0" placeholder="Search...">
                        </div>
                        <div class="mt-2 xl:mt-0">
                            <button id="tabulator-html-filter-go" type="button"
                                class="btn btn-primary w-full sm:w-16">Go</button>
                            <button id="tabulator-html-filter-reset" type="button"
                                class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
                        </div>
                    </form>
                    <div class="flex mt-5 sm:mt-0">
                        <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-printer w-4 h-4 mr-2">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                </path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg> Print </button>
                        <div class="dropdown w-1/2 sm:w-auto">
                            <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto"
                                aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-file-text w-4 h-4 mr-2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg> Export <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-down w-4 h-4 ml-auto sm:ml-2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg> </button>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a id="tabulator-export-csv" href="javascript:;"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-file-text w-4 h-4 mr-2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg> Export CSV </a>
                                    <a id="tabulator-export-json" href="javascript:;"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-file-text w-4 h-4 mr-2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg> Export JSON </a>
                                    <a id="tabulator-export-xlsx" href="javascript:;"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-file-text w-4 h-4 mr-2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg> Export XLSX </a>
                                    <a id="tabulator-export-html" href="javascript:;"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-file-text w-4 h-4 mr-2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg> Export HTML </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto scrollbar-hidden">
                    <div id="tabulator" class="mt-5 table-report table-report--tabulator tabulator" role="grid"
                        tabulator-layout="fitColumns">
                        <div class="tabulator-header" style="padding-right: 0px; margin-left: 0px;">
                            <div class="tabulator-headers" style="margin-left: 0px;">
                                <div class="tabulator-col" role="columnheader" aria-sort="none" title=""
                                    style="min-width: 30px; width: 40px; display: none; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="name" title=""
                                    style="min-width: 200px; height: 44px; width: 241px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">PRODUCT NAME</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="images" title=""
                                    style="min-width: 200px; height: 44px; width: 241px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">IMAGES</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="remaining_stock" title=""
                                    style="min-width: 200px; height: 44px; width: 241px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">REMAINING STOCK</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="status" title=""
                                    style="min-width: 200px; height: 44px; width: 241px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">STATUS</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="actions" title=""
                                    style="min-width: 200px; height: 44px; width: 243px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">ACTIONS</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="name" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">PRODUCT NAME</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="category" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">CATEGORY</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="remaining_stock" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">REMAINING STOCK</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="status" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">STATUS</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="images" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">IMAGE 1</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="images" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">IMAGE 2</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                                <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                                    tabulator-field="images" title=""
                                    style="display: none; min-width: 40px; height: 44px;">
                                    <div class="tabulator-col-content">
                                        <div class="tabulator-col-title-holder">
                                            <div class="tabulator-col-title">IMAGE 3</div>
                                            <div class="tabulator-col-sorter">
                                                <div class="tabulator-arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-col-resize-handle"></div>
                                    <div class="tabulator-col-resize-handle prev"></div>
                                </div>
                            </div>
                            <div class="tabulator-frozen-rows-holder"></div>
                        </div>
                        <div class="tabulator-tableHolder" tabindex="0" style="height: 658px;">
                            <div class="tabulator-table" style="padding-top: 0px; padding-bottom: 0px;">
                                <div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"
                                    style="padding-left: 0px;">
                                    <div class="tabulator-cell tabulator-row-handle" role="gridcell" title=""
                                        style="width: 40px; text-align: center; display: none; height: 64px;">
                                        <div class="tabulator-responsive-collapse-toggle open"><span
                                                class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                class="tabulator-responsive-collapse-toggle-close">-</span></div>
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="name" title=""
                                        style="width: 241px; display: inline-flex; align-items: center; height: 64px;">
                                        <div>
                                            <div class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</div>
                                            <div class="text-gray-600 text-xs whitespace-nowrap">Electronic</div>
                                        </div>
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="images" title=""
                                        style="width: 241px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
                                        <div class="flex lg:justify-center">
                                        </div>
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="remaining_stock"
                                        title=""
                                        style="width: 241px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
                                        70<div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="status" title=""
                                        style="width: 241px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
                                        <div class="flex items-center lg:justify-center text-theme-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check-square w-4 h-4 mr-2">
                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                </path>
                                            </svg> Inactive
                                        </div>
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="actions" title=""
                                        style="width: 243px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
                                        <div class="flex lg:justify-center items-center">
                                            <a class="edit flex items-center mr-3" href="javascript:;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check-square w-4 h-4 mr-1">
                                                    <polyline points="9 11 12 14 22 4"></polyline>
                                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                    </path>
                                                </svg> Edit
                                            </a>
                                            <a class="delete flex items-center text-theme-6" href="javascript:;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 w-4 h-4 mr-1">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg> Delete
                                            </a>
                                        </div>
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="name" title=""
                                        style="display: none; height: 64px;">Samsung Q90 QLED TV<div
                                            class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="category" title=""
                                        style="display: none; height: 64px;">Electronic<div
                                            class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="remaining_stock"
                                        title="" style="display: none; height: 64px;">70<div
                                            class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="status" title=""
                                        style="display: none; height: 64px;">0<div class="tabulator-col-resize-handle">
                                        </div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="images" title=""
                                        style="display: none; height: 64px;">preview-10.jpg,preview-4.jpg,preview-5.jpg
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="images" title=""
                                        style="display: none; height: 64px;">preview-10.jpg,preview-4.jpg,preview-5.jpg
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-cell" role="gridcell" tabulator-field="images" title=""
                                        style="display: none; height: 64px;">preview-10.jpg,preview-4.jpg,preview-5.jpg
                                        <div class="tabulator-col-resize-handle"></div>
                                        <div class="tabulator-col-resize-handle prev"></div>
                                    </div>
                                    <div class="tabulator-responsive-collapse"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tabulator-footer"><span class="tabulator-paginator"><label>Page Size</label><select
                                    class="tabulator-page-size" aria-label="Page Size" title="Page Size">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select><button class="tabulator-page" type="button" role="button"
                                    aria-label="First Page" title="First Page" data-page="first"
                                    disabled="">First</button><button class="tabulator-page" type="button" role="button"
                                    aria-label="Prev Page" title="Prev Page" data-page="prev"
                                    disabled="">Prev</button><span class="tabulator-pages"><button
                                        class="tabulator-page active" type="button" role="button"
                                        aria-label="Show Page 1" title="Show Page 1" data-page="1">1</button><button
                                        class="tabulator-page" type="button" role="button" aria-label="Show Page 2"
                                        title="Show Page 2" data-page="2">2</button></span><button
                                    class="tabulator-page" type="button" role="button" aria-label="Next Page"
                                    title="Next Page" data-page="next">Next</button><button class="tabulator-page"
                                    type="button" role="button" aria-label="Last Page" title="Last Page"
                                    data-page="last">Last</button></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
