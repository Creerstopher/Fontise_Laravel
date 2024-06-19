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
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="123"
                     viewBox="0 0 200 123"
                     fill="none">
                    <path d="M0 120.49L37.1115 0H71.3552L108.467 120.49H84.8503L51.7874 14.2245H56.1733L23.6164 120.49H0ZM22.2669 95.3877V74.1347H86.3685V95.3877H22.2669Z"
                          fill="white"/>
                    <path d="M148.887 123C142.365 123 136.826 121.773 132.272 119.318C127.773 116.808 124.343 113.489 121.982 109.361C119.676 105.178 118.523 100.576 118.523 95.5551C118.523 91.3714 119.17 87.5503 120.463 84.0918C121.757 80.6333 123.837 77.5932 126.705 74.9714C129.629 72.2939 133.537 70.0626 138.429 68.2775C141.802 67.0503 145.823 65.9626 150.49 65.0143C155.157 64.066 160.443 63.1735 166.347 62.3367C172.251 61.4442 178.745 60.468 185.83 59.4082L177.564 63.9265C177.564 58.5714 176.271 54.6388 173.685 52.1286C171.098 49.6184 166.768 48.3633 160.696 48.3633C157.322 48.3633 153.807 49.1721 150.153 50.7898C146.498 52.4075 143.939 55.2803 142.477 59.4082L121.729 52.8816C124.034 45.4068 128.364 39.3265 134.718 34.6408C141.071 29.9551 149.731 27.6122 160.696 27.6122C168.736 27.6122 175.878 28.8395 182.119 31.2939C188.361 33.7483 193.084 37.9878 196.289 44.0122C198.088 47.3592 199.157 50.7061 199.494 54.0531C199.831 57.4 200 61.1374 200 65.2653V120.49H179.926V101.914L182.794 105.763C178.352 111.844 173.544 116.25 168.371 118.984C163.254 121.661 156.76 123 148.887 123ZM153.779 105.094C157.997 105.094 161.539 104.369 164.407 102.918C167.331 101.412 169.636 99.7109 171.323 97.8143C173.066 95.9177 174.247 94.3279 174.865 93.0449C176.046 90.5905 176.721 87.7456 176.89 84.5102C177.115 81.219 177.227 78.4857 177.227 76.3102L183.975 77.9837C177.171 79.0993 171.66 80.0476 167.443 80.8286C163.226 81.5537 159.824 82.2231 157.237 82.8367C154.651 83.4503 152.374 84.1197 150.406 84.8449C148.156 85.7374 146.329 86.7136 144.923 87.7735C143.574 88.7775 142.562 89.8932 141.887 91.1204C141.268 92.3476 140.959 93.7143 140.959 95.2204C140.959 97.2844 141.465 99.0694 142.477 100.576C143.546 102.026 145.036 103.142 146.947 103.922C148.859 104.703 151.137 105.094 153.779 105.094Z"
                          fill="white"/>
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="123"
                     viewBox="0 0 200 123"
                     fill="none">
                    <path d="M6.63228 110.099C6.63228 110.099 22.7954 73.6962 55.1216 0.889693C55.3672 0.296564 56.5709 0 58.7325 0C60.8941 0 62.1223 0.296564 62.4171 0.889693L112.38 110.099C114.296 114.597 116.188 117.291 118.055 118.181C118.693 118.477 119.013 119.095 119.013 120.034C119.013 120.973 118.693 121.443 118.055 121.443H91.378C90.7394 121.443 90.42 121.023 90.42 120.183C90.42 119.293 90.5183 118.774 90.7148 118.626C90.9605 118.428 91.2798 118.255 91.6728 118.107C92.0658 117.909 92.3852 117.687 92.6308 117.439C94.4977 115.561 95.4311 113.831 95.4311 112.25C95.4311 110.618 95.2591 109.284 94.9153 108.246L84.2299 82.8156H31.098L20.6338 108.246C20.2899 109.284 20.1179 110.075 20.1179 110.618V111.434C20.1179 111.483 20.1179 111.533 20.1179 111.582C20.1179 113.609 21.0513 115.561 22.9182 117.439C23.1147 117.637 23.5323 117.884 24.171 118.181C24.8096 118.477 25.129 119.095 25.129 120.034C25.129 120.973 24.8096 121.443 24.171 121.443H0.957996C0.319332 121.443 0 121.023 0 120.183C0 119.293 0.098256 118.774 0.294768 118.626C0.540408 118.428 0.85974 118.23 1.25276 118.033C2.87399 117.341 4.66716 114.696 6.63228 110.099ZM36.3301 71.0271C36.2319 71.1754 36.2073 71.3731 36.2564 71.6203C36.3056 71.818 36.4038 71.9168 36.5512 71.9168H78.6293C78.7767 71.9168 78.875 71.818 78.9241 71.6203C78.9732 71.3731 78.9487 71.1754 78.8504 71.0271L57.5534 24.4665H57.0376L36.3301 71.0271Z"
                          fill="white"/>
                    <path d="M136.551 102.685C136.551 105.997 137.976 108.493 140.825 110.174C143.675 111.805 146.573 112.62 149.521 112.62C152.469 112.62 154.655 112.497 156.08 112.25C157.553 112.002 159.052 111.558 160.575 110.915C163.424 109.729 165.954 108.493 168.165 107.208C168.165 107.208 169.32 106.565 171.629 105.28L167.354 85.5588C165.586 86.2508 163.4 87.0169 160.796 87.8571L153.721 90.0814C142.275 93.5413 136.551 97.7426 136.551 102.685ZM165.954 77.9222C164.48 64.3791 160.575 57.6076 154.237 57.6076C150.356 57.6076 146.966 59.0163 144.068 61.8336C141.218 64.6016 139.794 67.8638 139.794 71.6203L140.457 74.66C140.457 75.0555 139.966 75.6733 138.983 76.5136C138.05 77.3538 137.411 77.6257 137.067 77.3291L128.519 66.2821C128.519 65.6395 129.059 64.9228 130.14 64.132C131.27 63.3412 132.228 62.5503 133.014 61.7595L134.783 60.0543C137.337 57.484 139.13 55.8529 140.162 55.1609L143.773 52.7884C147.31 50.4653 151.24 49.3038 155.564 49.3038C161.901 49.3038 166.716 51.0338 170.007 54.4937C172.267 56.8662 173.839 59.214 174.724 61.5371C175.608 63.8107 176.247 65.6643 176.64 67.0976C177.475 70.1621 178.163 73.7209 178.703 77.774L179.514 83.4828C179.808 85.7565 180.103 87.8819 180.398 89.859C180.742 91.8361 180.963 93.1953 181.061 93.9367C181.159 94.6287 181.405 95.8891 181.798 97.7179C182.191 99.4973 182.56 100.98 182.903 102.166C183.935 105.676 185.139 108.32 186.514 110.099C187.89 111.829 189.413 112.694 191.083 112.694C192.803 112.694 194.006 112.2 194.694 111.212C195.972 109.333 196.905 108.394 197.494 108.394C197.789 108.394 198.281 108.74 198.968 109.432C199.656 110.124 200 110.643 200 110.989C200 111.335 199.214 112.497 197.642 114.474C196.119 116.401 194.375 118.304 192.41 120.183C190.494 122.061 189.118 123 188.283 123C185.139 123 182.142 121.764 179.293 119.293C176.492 116.772 174.773 114.128 174.134 111.36C172.513 112.843 169.762 114.647 165.881 116.772C158.217 120.924 152.076 123 147.458 123C142.84 123 138.934 122.333 135.741 120.998C132.596 119.664 129.968 117.612 127.856 114.844C125.792 112.077 124.761 109.185 124.761 106.17C124.761 103.155 125.178 100.634 126.013 98.6076C126.848 96.5811 127.929 94.8511 129.256 93.4177C130.582 91.9349 132.228 90.5757 134.193 89.34C136.158 88.0549 138.148 86.9922 140.162 86.1519C144.387 84.4219 149.054 82.8897 154.164 81.5552C159.322 80.1712 163.252 78.9602 165.954 77.9222Z"
                          fill="white"/>
                </svg>
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