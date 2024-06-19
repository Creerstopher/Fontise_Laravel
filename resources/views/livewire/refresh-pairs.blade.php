<div class="choose_blocks">
    <div class="vashehzchozablock">
        <div class="ch_block yellow">
            <div class="pbtb_top">
                <div class="tags">
                    <div class="tag">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 20 20"
                             fill="none">
                            <path d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                            />
                        </svg>
                        <p>{{ $first->category->name }}</p>
                    </div>
                </div>
                <a href="{{ route('product', ['productId' => $first->id]) }}" class="btn_to">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="25"/>
                        <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                              x="13"
                              y="13" width="24" height="24">
                            <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_120_484)">
                            <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pbtb_bottom">
                <h1>{{ $first->name }}</h1>
                <p class="pbbs_bottom_aa" style="font-family: {{ $first->name }}">Aa</p>
            </div>
        </div>
        <div class="ch_block blue">
            <div class="pbtb_top">
                <div class="tags">
                    <div class="tag">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 20 20"
                             fill="none">
                            <path d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                            />
                        </svg>
                        <p>{{ $second->category->name }}</p>
                    </div>
                </div>
                <a href="{{ route('product', ['productId' => $second->id]) }}" class="btn_to">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="25"/>
                        <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                              x="13"
                              y="13" width="24" height="24">
                            <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_120_484)">
                            <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pbtb_bottom">
                <h1>{{ $second->name }}</h1>
                <p class="pbbs_bottom_aa" style="font-family: {{ $second->name }}">Aa</p>
            </div>
        </div>
    </div>
    <div class="ch_block_refresh" wire:click="regeneratePairs">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90"
             fill="none">
            <mask id="mask0_120_333" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                  width="90" height="90">
                <rect width="90" height="90" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask0_120_333)">
                <path d="M19.1251 60.1873C17.7501 57.8123 16.7189 55.3748 16.0314 52.8748C15.3439 50.3748 15.0001 47.8123 15.0001 45.1873C15.0001 36.8123 17.9064 29.6873 23.7189 23.8123C29.5314 17.9373 36.6251 14.9998 45.0001 14.9998H45.6564L39.6564 8.99976L44.9064 3.74976L59.9064 18.7498L44.9064 33.7498L39.6564 28.4998L45.6564 22.4998H45.0001C38.7501 22.4998 33.4376 24.7029 29.0626 29.1091C24.6876 33.5154 22.5001 38.8748 22.5001 45.1873C22.5001 46.8123 22.6876 48.406 23.0626 49.9685C23.4376 51.531 24.0001 53.0623 24.7501 54.5623L19.1251 60.1873ZM45.0939 86.2498L30.0939 71.2498L45.0939 56.2498L50.3439 61.4998L44.3439 67.4998H45.0001C51.2501 67.4998 56.5626 65.2966 60.9376 60.8904C65.3126 56.4841 67.5001 51.1248 67.5001 44.8123C67.5001 43.1873 67.3126 41.5935 66.9376 40.031C66.5626 38.4685 66.0001 36.9373 65.2501 35.4373L70.8751 29.8123C72.2501 32.1873 73.2814 34.6248 73.9689 37.1248C74.6564 39.6248 75.0001 42.1873 75.0001 44.8123C75.0001 53.1873 72.0939 60.3123 66.2814 66.1873C60.4689 72.0623 53.3751 74.9998 45.0001 74.9998H44.3439L50.3439 80.9998L45.0939 86.2498Z"
                />
            </g>
        </svg>
    </div>
</div>