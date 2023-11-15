import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle } from "vue/server-renderer";
const _sfc_main = {
  name: "Profile",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({
        class: "modal fade",
        id: "profile",
        "data-bs-keyboard": "false",
        tabindex: "-1",
        "aria-labelledby": "profileLabel",
        "aria-hidden": "true"
      }, _attrs))}><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h1 class="modal-title fs-5" id="profileLabel">Profile</h1><button type="button" class="rounded border text-white bg-secondary" data-bs-dismiss="modal" aria-label="Close">esc</button></div><div class="modal-body"><div class="row justify-content-center py-4"><div style="${ssrRenderStyle({ "width": "100px" })}"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="w-100 shadow-sm mb-3"></div><div class="col-lg-6 border rounded p-3 shadow-sm"><div class="d-flex name"><p class="fw-bold me-1">Name -</p><p>Admin</p></div><div class="d-flex email"><p class="fw-bold me-1">Email -</p><p>admin@example.com</p></div></div><div class="row pt-5">`);
      {
        _push(`<button class="btn btn-sm btn-primary col">Edit Profile</button>`);
      }
      {
        _push(`<!---->`);
      }
      _push(`</div></div></div></div></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Modals/Profile.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
