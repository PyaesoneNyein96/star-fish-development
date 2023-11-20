import { mergeProps, unref, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrRenderAttr } from "vue/server-renderer";
import { useForm } from "@inertiajs/vue3";
const _sfc_main = {
  name: "Edit",
  __ssrInlineRender: true,
  props: {
    student: Object
  },
  setup(__props) {
    const data = __props;
    const form = useForm({
      name: data.student.name,
      email: data.student.email,
      phone: data.student.phone,
      board: data.student.board,
      level: data.student.level,
      point: data.student.point,
      status: data.student.status,
      age: data.student.age,
      accState: data.student.isSubscriber
    });
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({
        class: "modal fade",
        id: `staticBackdropEdit${__props.student.id}`,
        "data-bs-keyboard": "false",
        tabindex: "-1",
        "aria-labelledby": "staticBackdropLabel",
        "aria-hidden": "true"
      }, _attrs))}><div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h1 class="modal-title fs-5" id="staticBackdropLabel"> Student Profile Edit </h1><button type="button" class="rounded border text-white bg-secondary" data-bs-dismiss="modal" aria-label="Close">esc</button></div><form class=""><div class="modal-body overflow-y-scroll" style="${ssrRenderStyle({ "height": "70vh" })}"><div class="row justify-content-center"><div style="${ssrRenderStyle({ "width": "100px" })}"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="w-100 shadow-sm mb-3"></div><div class="col-lg-6 border rounded p-3 shadow-sm"><div class="name text-start pb-2"><span class="fw-bold">Name</span><input type="text" name="name" class="form-control"${ssrRenderAttr("value", unref(form).name)}></div><div class="email text-start pb-2"><span class="fw-bold">Email</span><input type="email" name="email" class="form-control"${ssrRenderAttr("value", unref(form).email)}></div><div class="phone text-start pb-2"><span class="fw-bold">Phone</span><input type="text" name="phone" class="form-control"${ssrRenderAttr("value", unref(form).phone)}></div><div class="tier text-start pb-2"><span class="fw-bold">Tier</span><input type="text" name="board" class="form-control"${ssrRenderAttr("value", unref(form).board)}></div><div class="level text-start pb-2"><span class="fw-bold">Level</span><input type="text" name="level" class="form-control"${ssrRenderAttr("value", unref(form).level)}></div><div class="point text-start pb-2"><span class="fw-bold">Point</span><input type="text" name="point" class="form-control"${ssrRenderAttr("value", unref(form).point)}></div><div class="status text-start pb-2"><span class="fw-bold">Status</span><div class="input-group"><select class="form-select" id="inputGroupSelect03"><option value="1">online</option><option value="0">offline</option></select></div></div><div class="age text-start pb-2"><span class="fw-bold">Age</span><input type="text" name="age" class="form-control"${ssrRenderAttr("value", unref(form).age)}></div><div class="subscribe text-start"><span class="fw-bold">Account Statement</span><div class="input-group"><select class="form-select" id="inputGroupSelect03"><option value="1">Subscribe User </option><option value="0">Free User</option></select></div></div></div></div></div><div class="modal-footer"><button type="submit" class="btn btn-secondary col"> Update </button></div></form></div></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Students/Modals/Edit.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
