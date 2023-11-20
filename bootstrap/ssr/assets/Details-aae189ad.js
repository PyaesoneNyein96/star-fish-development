import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrInterpolate } from "vue/server-renderer";
const _sfc_main = {
  name: "Details",
  __ssrInlineRender: true,
  props: {
    student: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({
        class: "modal fade",
        id: `staticBackdrop${__props.student.id}`,
        "data-bs-keyboard": "false",
        tabindex: "-1",
        "aria-labelledby": "staticBackdropLabel",
        "aria-hidden": "true"
      }, _attrs))}><div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><h1 class="modal-title fs-5" id="staticBackdropLabel"> Student Profile </h1><button type="button" class="rounded border text-white bg-secondary" data-bs-dismiss="modal" aria-label="Close">esc</button></div><div class="modal-body mb-3"><div class="row justify-content-center"><div style="${ssrRenderStyle({ "width": "100px" })}"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="w-100 shadow-sm mb-3"></div><div class="col-lg-6 border rounded p-3 shadow-sm"><div class="d-flex name"><p class="fw-bold me-2">Name -</p><p>${ssrInterpolate(__props.student.name)}</p></div><div class="d-flex email"><p class="fw-bold me-2">Email -</p><p>${ssrInterpolate(__props.student.email)}</p></div><div class="d-flex phone"><p class="fw-bold me-2">Phone -</p><p>${ssrInterpolate(__props.student.phone)}</p></div><div class="d-flex tier"><p class="fw-bold me-2">Tier -</p><p>${ssrInterpolate(__props.student.board)}</p></div><div class="d-flex level"><p class="fw-bold me-2">Level -</p><p>${ssrInterpolate(__props.student.level)}</p></div><div class="d-flex point"><p class="fw-bold me-2">Point -</p><p>${ssrInterpolate(__props.student.point)}</p></div><div class="d-flex status"><p class="fw-bold me-2">Status -</p><p>${ssrInterpolate(__props.student.isAuth ? "online" : "offline")}</p></div><div class="d-flex age"><p class="fw-bold me-2">Age -</p><p>${ssrInterpolate(__props.student.isAuth)}</p></div><div class="subscribe"><p class="border rounded py-2 fw-bold">${ssrInterpolate(__props.student.isSubscriber ? "Subscribe User" : "Free User")}</p></div></div></div></div></div></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Students/Modals/Details.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
