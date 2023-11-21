<script setup>
import { ref, computed, onMounted } from "vue";
import { router } from '@inertiajs/vue3';
import Header from "../Dashboard/Header/Index.vue";
import SideBar from "../Dashboard/SideBar/Index.vue";
import Details from "./Modals/Details.vue";
import Edit from "./Modals/Edit.vue";

const data = defineProps({
    user: Object,
    students: Object,
});

const search = ref("");
const perPage = ref(data.students.length);
const currentPage = ref(1);

const filteredData = computed(() => {
    const query = search.value.toLowerCase().replace(/\s/g, "");
    const filtered = data.students.filter((student) =>
        student.phone == null
            ? student.name.toLowerCase().replace(/\s/g, "").includes(query) ||
            student.email.toLowerCase().replace(/\s/g, "").includes(query)
            : student.email == null
                ? student.name.toLowerCase().replace(/\s/g, "").includes(query) ||
                student.phone.toLowerCase().replace(/\s/g, "").includes(query)
                : ""
    );

    const start = (currentPage.value - 1) * perPage.value;
    const end = start + Number(perPage.value);

    return filtered.slice(start, end);
});

const totalPages = computed(() => Math.ceil(data.students.length / perPage.value));

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++;
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
    }
};

const gotoPage = (page) => {
    if (page >= 1 && page <= totalPages.value) {
        currentPage.value = page;
    }
};

const deletePerStudent = (id, name) => {
    const confirmed = confirm(`Are you sure to delete ${name} ?`)
    confirmed ? router.get(`/dashboard/student/remove/${id}`) : "";
}

onMounted(() => {
    (function () {
        "use strict";

        /**
         * Easy selector helper function
         */
        const select = (el, all = false) => {
            el = el.trim();
            if (all) {
                return [...document.querySelectorAll(el)];
            } else {
                return document.querySelector(el);
            }
        };

        /**
         * Easy event listener function
         */
        const on = (type, el, listener, all = false) => {
            if (all) {
                select(el, all).forEach((e) =>
                    e.addEventListener(type, listener)
                );
            } else {
                select(el, all).addEventListener(type, listener);
            }
        };

        /**
         * Easy on scroll event listener
         */
        const onscroll = (el, listener) => {
            el.addEventListener("scroll", listener);
        };

        /**
         * Sidebar toggle
         */
        if (select(".toggle-sidebar-btn")) {
            on("click", ".toggle-sidebar-btn", function (e) {
                select("body").classList.toggle("toggle-sidebar");
            });
        }

        /**
         * Search bar toggle
         */
        if (select(".search-bar-toggle")) {
            on("click", ".search-bar-toggle", function (e) {
                select(".search-bar").classList.toggle("search-bar-show");
            });
        }

        /**
         * Navbar links active state on scroll
         */
        let navbarlinks = select("#navbar .scrollto", true);
        const navbarlinksActive = () => {
            let position = window.scrollY + 200;
            navbarlinks.forEach((navbarlink) => {
                if (!navbarlink.hash) return;
                let section = select(navbarlink.hash);
                if (!section) return;
                if (
                    position >= section.offsetTop &&
                    position <= section.offsetTop + section.offsetHeight
                ) {
                    navbarlink.classList.add("active");
                } else {
                    navbarlink.classList.remove("active");
                }
            });
        };
        window.addEventListener("load", navbarlinksActive);
        onscroll(document, navbarlinksActive);

        /**
         * Toggle .header-scrolled class to #header when page is scrolled
         */
        let selectHeader = select("#header");
        if (selectHeader) {
            const headerScrolled = () => {
                if (window.scrollY > 100) {
                    selectHeader.classList.add("header-scrolled");
                } else {
                    selectHeader.classList.remove("header-scrolled");
                }
            };
            window.addEventListener("load", headerScrolled);
            onscroll(document, headerScrolled);
        }

        /**
         * Back to top button
         */
        let backtotop = select(".back-to-top");
        if (backtotop) {
            const toggleBacktotop = () => {
                if (window.scrollY > 100) {
                    backtotop.classList.add("active");
                } else {
                    backtotop.classList.remove("active");
                }
            };
            window.addEventListener("load", toggleBacktotop);
            onscroll(document, toggleBacktotop);
        }

        /**
         * Initiate tooltips
         */
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        /**
         * Initiate quill editors
         */
        if (select(".quill-editor-default")) {
            new Quill(".quill-editor-default", {
                theme: "snow",
            });
        }

        if (select(".quill-editor-bubble")) {
            new Quill(".quill-editor-bubble", {
                theme: "bubble",
            });
        }

        if (select(".quill-editor-full")) {
            new Quill(".quill-editor-full", {
                modules: {
                    toolbar: [
                        [
                            {
                                font: [],
                            },
                            {
                                size: [],
                            },
                        ],
                        ["bold", "italic", "underline", "strike"],
                        [
                            {
                                color: [],
                            },
                            {
                                background: [],
                            },
                        ],
                        [
                            {
                                script: "super",
                            },
                            {
                                script: "sub",
                            },
                        ],
                        [
                            {
                                list: "ordered",
                            },
                            {
                                list: "bullet",
                            },
                            {
                                indent: "-1",
                            },
                            {
                                indent: "+1",
                            },
                        ],
                        [
                            "direction",
                            {
                                align: [],
                            },
                        ],
                        ["link", "image", "video"],
                        ["clean"],
                    ],
                },
                theme: "snow",
            });
        }

        /**
         * Initiate TinyMCE Editor
         */
        const useDarkMode = window.matchMedia(
            "(prefers-color-scheme: dark)"
        ).matches;
        const isSmallScreen = window.matchMedia(
            "(max-width: 1023.5px)"
        ).matches;

        tinymce.init({
            selector: "textarea.tinymce-editor",
            plugins:
                "preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons",
            editimage_cors_hosts: ["picsum.photos"],
            menubar: "file edit view insert format tools table help",
            toolbar:
                "undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl",
            toolbar_sticky: true,
            toolbar_sticky_offset: isSmallScreen ? 102 : 108,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            link_list: [
                {
                    title: "My page 1",
                    value: "https://www.tiny.cloud",
                },
                {
                    title: "My page 2",
                    value: "http://www.moxiecode.com",
                },
            ],
            image_list: [
                {
                    title: "My page 1",
                    value: "https://www.tiny.cloud",
                },
                {
                    title: "My page 2",
                    value: "http://www.moxiecode.com",
                },
            ],
            image_class_list: [
                {
                    title: "None",
                    value: "",
                },
                {
                    title: "Some class",
                    value: "class-name",
                },
            ],
            importcss_append: true,
            file_picker_callback: (callback, value, meta) => {
                /* Provide file and text for the link dialog */
                if (meta.filetype === "file") {
                    callback("https://www.google.com/logos/google.jpg", {
                        text: "My text",
                    });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === "image") {
                    callback("https://www.google.com/logos/google.jpg", {
                        alt: "My alt text",
                    });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === "media") {
                    callback("movie.mp4", {
                        source2: "alt.ogg",
                        poster: "https://www.google.com/logos/google.jpg",
                    });
                }
            },
            templates: [
                {
                    title: "New Table",
                    description: "creates a new table",
                    content:
                        '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>',
                },
                {
                    title: "Starting my story",
                    description: "A cure for writers block",
                    content: "Once upon a time...",
                },
                {
                    title: "New list with dates",
                    description: "New List with dates",
                    content:
                        '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>',
                },
            ],
            template_cdate_format:
                "[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]",
            template_mdate_format:
                "[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]",
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar:
                "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
            noneditable_class: "mceNonEditable",
            toolbar_mode: "sliding",
            contextmenu: "link image table",
            skin: useDarkMode ? "oxide-dark" : "oxide",
            content_css: useDarkMode ? "dark" : "default",
            content_style:
                "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
        });

        /**
         * Initiate Bootstrap validation check
         */
        var needsValidation = document.querySelectorAll(".needs-validation");

        Array.prototype.slice.call(needsValidation).forEach(function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });

        /**
         * Initiate Datatables
         */
        const datatables = select(".datatable", true);
        datatables.forEach((datatable) => {
            new simpleDatatables.DataTable(datatable);
        });

        /**
         * Autoresize echart charts
         */
        const mainContainer = select("#main");
        if (mainContainer) {
            setTimeout(() => {
                new ResizeObserver(function () {
                    select(".echart", true).forEach((getEchart) => {
                        echarts.getInstanceByDom(getEchart).resize();
                    });
                }).observe(mainContainer);
            }, 200);
        }
    })();
});
</script>

<template>
    <Header :user="user"></Header>
    <SideBar></SideBar>
    <main id="main" class="main">
        <div class="mx-3">
            <div class="d-flex mb-4 pt-3 border-bottom">
                <h1>Students</h1>
                <div class="col text-end">
                    <small class="text-muted" style="cursor: pointer"></small>
                </div>
            </div>
            <!-- data numbers  -->
            <div class="d-flex justify-content-between mb-3">
                <select class="border-0 rounded shadow-sm" style="width: 81px" v-model="perPage">
                    <option :value="`${students.length}`">All</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                </select>
                <input type="text" class="shadow-sm" placeholder="Search . . . " v-model="search" />
            </div>

            <table class="table table-hover rounded-5">
                <thead>
                    <tr class=" ">
                        <th>id</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>age</th>
                        <th>level</th>
                        <th>Tier</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody v-if="filteredData.length > 0">
                    <tr v-for="s in filteredData" :key="s.id">
                        <td>{{ s.id }}</td>
                        <td>
                            <img :src="'/storage/' + s.profile_picture" alt="" />
                        </td>
                        <td>{{ s.name }}</td>
                        <td>{{ s.age }}</td>
                        <td>{{ s.level }}</td>
                        <td class="d-none">{{ s.email }}</td>
                        <td class="d-none">{{ s.phone }}</td>
                        <td>{{ s.board }}</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-success" data-bs-toggle="modal"
                                :data-bs-target="`#staticBackdrop${s.id}`">
                                View
                            </button>
                            <Details :student="s"></Details>

                            <button class="btn btn-sm btn-warning ms-2" data-bs-toggle="modal"
                                :data-bs-target="`#staticBackdropEdit${s.id}`">
                                Edit
                            </button>
                            <Edit :student="s"></Edit>
                            <button class="btn btn-sm btn-danger ms-2" @click.prevent="deletePerStudent(s.id, s.name)">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
                <tbody v-else class="text-center">
                    <tr>
                        <td colspan="7">No results found.</td>
                    </tr>
                </tbody>
            </table>

            <!-- pagination  -->
            <div class=" d-flex justify-content-between mt-4">
                <p>Showing <strong>1</strong> to <strong>{{ perPage }}</strong> of <strong>{{ students.length }}</strong>
                    entries</p>
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item" :class="{ disabled: currentPage === 1 }">
                            <a class="page-link" @click.prevent="prevPage" href="#">Previous</a>
                        </li>

                        <li v-for="pageNumber in totalPages" :key="pageNumber" class="page-item"
                            :class="{ active: pageNumber === currentPage }">
                            <a class="page-link" @click.prevent="gotoPage(pageNumber)" href="#">{{ pageNumber }}</a>
                        </li>

                        <li class="page-item" :class="{ disabled: currentPage === totalPages }">
                            <a class="page-link" @click.prevent="nextPage" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
</template>

<style>
[type="text"],
input:where(:not([type])),
[type="email"],
[type="url"],
[type="password"],
[type="number"],
[type="date"],
[type="datetime-local"],
[type="month"],
[type="search"],
[type="tel"],
[type="time"],
[type="week"],
[multiple],
textarea {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border: none;
    border-radius: 10px;
    padding-top: 0.5rem;
    padding-right: 0.75rem;
    padding-bottom: 0.5rem;
    padding-left: 0.75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 #0000;
}

select {
    margin-right: 10px;
    padding-left: 0.75rem;
    width: 60px;
    border: none;
    border-radius: 5px;
}
</style>
